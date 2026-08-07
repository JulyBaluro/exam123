import { Head } from '@inertiajs/react';
// import { PlaceholderPattern } from '@/components/ui/placeholder-pattern';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { useForm } from '@inertiajs/react';
import { dashboard } from '@/routes';

export default function Dashboard() {
    const form = useForm({ room_name: '', room_number: '', condition: '', room_floor: '', room_type: '' });

    function submit(event: React.FormEvent<HTMLFormElement>) {
        event.preventDefault();
        form.post('/roomexams', {
            onSuccess: () => form.reset(),
        });
    }
    return (
        <>
            <Head title="Dashboard" />
            <div className="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
                <div>
                    <h1 className="text-x1 font-semibold">Room Number</h1>
                    <p className="text-sm text-muted-foreground">
                        Room Number
                    </p>

                    <form onSubmit={submit} className="max-w-x1 space-y-2 rounded-x1 border p-4">

                        <div className="space-y-2">
                            <label htmlFor="room_name">Name</label>
                            <Input
                                id="room_name"
                                value={form.data.room_name}
                                onChange={(event) => form.setData('room_name', event.target.value)}
                            />
                            {form.errors.room_name && <p className="text-sm text-red-600">{form.errors.room_name}</p>}
                        </div>


                        <div className="space-y-2">
                            <label htmlFor="room_number">Room Number</label>
                            <Input
                                id="room_number"
                                value={form.data.room_number}
                                onChange={(event) => form.setData('room_number', event.target.value)}
                            />
                            {form.errors.room_number && <p className="text-sm text-red-600">{form.errors.room_number}</p>}
                        </div>
                        <div className="space-y-2">
                            <label htmlFor="condition">Condition</label>
                            <Input
                                id="condition"
                                value={form.data.condition}
                                onChange={(event) => form.setData('condition', event.target.value)}
                            />
                            {form.errors.condition && <p className="text-sm text-red-600">{form.errors.condition}</p>}
                        </div>
                        <div className="space-y-2">
                            <label htmlFor="room_floor">Room Floor</label>
                            <Input
                                id="room_floor"
                                value={form.data.room_floor}
                                onChange={(event) => form.setData('room_floor', event.target.value)}
                            />
                            {form.errors.room_floor && <p className="text-sm text-red-600">{form.errors.room_floor}</p>}
                        </div>
                        <div className="space-y-2">
                            <label htmlFor="room_type">Room Type</label>
                            <Input
                                id="room_type"
                                value={form.data.room_type}
                                onChange={(event) => form.setData('room_type', event.target.value)}
                            />
                            {form.errors.room_type && <p className="text-sm text-red-600">{form.errors.room_type}</p>}


                        </div>
                        <Button type="submit" disabled={form.processing}>Save Room</Button>

                    </form>


                </div>

            </div>
        </>
    );
}

Dashboard.layout = {
    breadcrumbs: [
        {
            title: 'Dashboard',
            href: dashboard(),
        },
    ],
};
